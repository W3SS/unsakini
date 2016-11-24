[![Build Status](https://travis-ci.org/unsakini/unsakini-engine.svg?branch=master)](https://travis-ci.org/unsakini/unsakini-engine)

UNSAKINI
-----------
*Created by and for online activists, information security enthusiasts and government surveillance evaders.*

**[Unsakini](https://www.unsakini.com)** is an open source encrypted bulletin board created with the aim of evading global information surveillance and spying, preventing data leaks and promoting information confidentiality and integrity.

Perfect for:

 - group discussions on sensitive issues
 - confidential conversations
 - storing passwords, liscenses, credit card details, and other sensitive documents

-------------------------

### How it Works
Upon using the system, you'll be asked to provide your private key. This key is used to encrypt your data before they are sent to the server. The key is stored in your computer and is never sent to the server.

Hackers, surveillance and spy softwares and even the server host cannot read your data, unless they are able to obtain your private key. Your private key is deleted from your computer everytime you logout to ensure no one can obtain it while you're away.

To increase the security, your data is re-encrypted in the backend before being saved to the database, which adds a second layer of protection.

So to access your data, the hacker needs to know two things - (1) your private key and (2) the server encryption key. That is, if they are able to bypass the server security and gets access to the database. Even so, they won't be able to read the data without these two elements.

The data is ecnrypted using [Advanced Encryption System (AES)](https://en.wikipedia.org/wiki/Advanced_Encryption_Standard), the most widely used and trusted encryption algorithm.

------

### System Requirements
 - Ruby >= 2.2.2
 - Rails >= 5.0
 - Bunlder gem

### Installation
Create a new rails application named `my-app` or anything you like.
```
$ rails new my-app
$ cd my-app
```
Add the gem to your `Gemfile`.
```
gem 'unsakini'
```
Bundle install and initialize the application
```
$ bundle install
$ rake unsakini:install
```

Run local rails server
```
$ rails s
```
Now you will be able to see the application at [http://localhost:3000](http://localhost:3000)

------------------------------

### Encryption Specifications

  - server
    - Algorithm = `AES`
    - Mode = `CBC`
    - Key Size = `256`
    - *Others = autogenerated, random
  - client
    - Algorithm = `AES`
    - Mode = `CBC`
    - Padding = `Pkcs7`
    - Key Derivation Function = `PBKDF2`
    - Key Size = `256`
    - Initialization Vector Size = `128`
    - PBKDF2 iterations = `500`

### Security
  If you find any security flaws, please don't write a github issue. Email me instead at pitogo.adones@gmail.com so we can fix it before the public knows.

### Author
[Adones Pitogo](http://adonespitogo.com)

### License
Released under the terms of [MIT](https://opensource.org/licenses/MIT) License.
