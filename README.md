这个项目用于测试将不符合psr-0或者psr-4规范的项目如何加入composer

## 关于classmap

classmap 引用的所有组合，都会在 install/update 过程中生成，并存储到 vendor/composer/autoload_classmap.php 文件中。这个 map 是经过扫描指定目录（同样支持直接精确到文件）中所有的 .php 和 .inc 文件里内置的类而得到的。

你可以用 classmap 生成支持支持自定义加载的不遵循 PSR-0/4 规范的类库。要配置它指向需要的目录，以便能够准确搜索到类文件。

实例：
```
{
    "autoload": {
        "classmap": ["src/", "lib/", "Something.php"]
    }
}
```

[参考](http://docs.phpcomposer.com/04-schema.md#Classmap)


## 问题

直接安装 `ecdarwin/ct1=*` 不成功, 而需要指定为 `dev-master`