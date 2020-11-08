# The Kanye Says application

So the most simple way is to run the app in a homestead box

In the homestead.yml you need to define a database called kanye_says. 
The file would look something like this: 

```
ip: "192.168.10.10"
memory: 4096
cpus: 8
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/Sites/
      to: /vagrant
      type: nfs`
      
sites:
    - map: kanye_says.app
      to: /vagrant/kanye_says/public
      php: '7.4'     
      
databases:
    - kanye_says`
```
In your host file you can specifie the following
``192.168.10.10 kanye_speak.app``

So ``vagrant up`` homestead and navigate to the folder.
There execute ```php artisan migrate && php artisan db:seed```

Navigate in a browser to [here](https://kanye_says.app)

In the upper right corner you can login, credentials are as follow:
```
email: kanye@kanye.west 
password: kanye
```

For security I wanted to implement JWT but time was short.
