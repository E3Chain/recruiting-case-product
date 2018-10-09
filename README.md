# 一三链招聘案例分析

## 前提条件
此案例分析需要以下组件

* PHP7
* 文档编辑器或IDE任意
* shell用来运行测试
* Composer

## 目标
此案例主要测试以下技能

* PHP的OOP实现
* 测试
* 处理本地文档
* 处理JSON数据

## 任务

3项任务包括测试，在满足要求的前提下鼓励创造性，但是没有必要用非常复杂的结构，每一项应该最多在30分钟之内完成，

### 1. 实现接口`ProductRepositoryInterface`

使用data文件夹下的json文档作为数据实现此接口，返回Products[]

相关数据结构如下:

```
User -[hasMany]-> Products -[hasMany]-> Transactions
```

### 2. 验证Product对象中的url属性

为Product的url创建一个合适的validator，你可以自由的选择如何验证url，以及如何在现有架构中实现

### 3. 另一种对接口ProductServiceInterface的实现

你可以自由选择设计模式，选一个自己最熟悉的方式实现，比如`PriceOrderedProductService`，在得到Products之后进行排序