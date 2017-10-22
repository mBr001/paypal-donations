# PayPal Donations
This is the official Github Repository of the [SourceMod Plugin 'PayPal Donations'](https://forums.alliedmods.net/showthread.php?t=302214)

If you find any bugs, please do not hesitate to report them to me.

[![GitHub issues](https://img.shields.io/github/issues/Triniayo/paypal-donations.svg)](https://github.com/Triniayo/paypal-donations/issues)
[![GitHub stars](https://img.shields.io/github/stars/Triniayo/paypal-donations.svg)](https://github.com/Triniayo/paypal-donations/stargazers)
[![GitHub license](https://img.shields.io/github/license/triniayo/paypal-donations.svg)](https://github.com/Triniayo/paypal-donations/blob/master/License.txt)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/Triniayo/paypal-donations.svg?style=social)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2FTriniayo%2Fpaypal-donations)

# How to set up (Webinterface)
### 💾 Clone the repo
```
git clone https://github.com/Triniayo/paypal-donations.git
```

### ⚙️ Create a MySQL-Database (for example: donations)
```Batch in the 'paypal.sql'-File after you created the MySQL-Database```


### ✏️ Edit the 'dbconfig.php'-File
```Enter your MySQL-Login details + database```

### ✏️ Edit the 'config.php'-File
```Change the paths to the files```

-----

# How to set up (SourceMod Plugin)
### 💾 Download the .sp-File(s) and compile them, or use the precompiled versions

### ⚙️ Upload the .smx-File(s) to '../addons/sourcemod/plugins'

### ▶️ Load the plugin
```Type into your Server Console: sm plugins load ppdonations_advanced(_csgo)```

### ✏️ Edit the config in '../csgo/cfg/sourcemod/ppdonations_advanced.cfg'
```Change the URL to your webpath of the Donate-Website```

### 🎓 You're done. Thanks for using my plugin :)

### 🤖 Authors
- Trinia (FreakyLike)

###     ❤️   Credits
- [BlackCetha](https://github.com/SmItH197/SteamAuthentication)
