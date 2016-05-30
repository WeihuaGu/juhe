# juhe
作为自己的远端数据云。提供数据服务。
ip :185.28.20.22
website:http://juhe.ml
##完全的restful api
所有api的调用，都尽量遵守表征状态转移架构。

##使用范例
###每个模块不加任何调用会显示说明
例如 http://juhe.ml/v1_0/users 会显示 1.0 版本的 users的使用说明。

###使用post 新建一个资源
post http://juhe.ml/v1_0/users 会新建一个用户。
###使用get获得资源
get http://juhe.ml/v1_0/users/12321 会获得id为12321的用户数据。
