# Test Package
## References
- Coming Soon (Medium)
## How to Load
- In composer.json, add this:
```
...
"scripts" : {},
"repositories": [
        {
          "type": "git",
          "url": "https://github.com/Cerwyn/Ping.git"
        }
    ]
...
```
- Then, ```composer require Cerwyn/Ping```
## Uses
- This is a test package. The only function is giving a feedback "pong", when the ping() method is being called:
``` Ping::ping() ```
