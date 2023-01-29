`#php` `#oop` `#master-in-software-engineering`

# OOP Basics with PHP <!-- omit in toc -->

This repository is an OOP classes architecture with PHP code.

## Table of contents

- [Table of contents](#table-of-contents)

- [Dependencies](#dependencies)

- [Tools](#tools)

- [OOP Introduction](#oop-introduction)

- [Project files](#project-files)

## Dependencies

To run this repository you will need to make sure taht all the necessary dependences are installed in your system.

### PHP <!-- omit in toc -->

You can install it by following the instructions [in the official docs](https://www.php.net/downloads) (It is recommended that you install the version that is named _Current_).

To verify that you have installed it correctly, you can run the following command from the terminal that should output the version installed:

```bash

$ php -version

```

## Tools

In the event that you prefer to use a tool that installs everything you need to configure and run a PHP server, it is recommended using [XAMPP](https://www.apachefriends.org/es/download.html)

### XAMPP <!-- omit in toc -->

XAMPP is a completely free and easy to install Apache distribution that contains MariaDB, PHP, and Perl. The XAMPP installation package has been designed to be incredibly easy to install and use.

<img  src='./assets/img/xampp-homepage.png'  width='600'  alt='xampp homepage'>

You have to go to the [download page](https://www.apachefriends.org/es/download.html) and it will automatically recommend installing the latest version available.

<img  src='./assets/img/xampp-download.png'  width='600'  alt='xampp download'>

Once downloaded and installed, in the case that the Windows operating system you will see the following screen, in which you will only have to start the Apache service.

<img  src='./assets/img/xampp-app.png'  width='600'  alt='xampp app'>

## OOP Introduction

Object-oriented programming (OOP) is a programming paradigm based on the concept of "objects", which can contain data and code: data in the form of fields (often known as attributes or properties), and code, in the form of procedures (often known as methods).

## Project files

### [cerealClass](./modules/cerealClass.php) <!-- omit in toc -->

It is an example of an abstract class with at least:

- 2 properties
- 2 methods

### [seedClass](./modules/seedClass.php) <!-- omit in toc -->

It is an example of a base class that will be inherited at least once.

This base case must have at least:

- 3 properties
- 3 methods
- 1 constructor and 1 destructor

### [seedingClass](./modules/seedingClass.php) <!-- omit in toc -->

It is an example of a class that inherits the base class.

This class must add:

- 1 static property
- 1 method

This class must override:

- 1 property
- 1 method.

### [sowingInterface](./modules/sowingInterface.php) <!-- omit in toc -->

It is an example of an interface that must be implemented by one class.

- This interface must have at least 2 methods.

### [index](index.php) <!-- omit in toc -->

This is the file where the created classes are instantiated and some methods are called.
