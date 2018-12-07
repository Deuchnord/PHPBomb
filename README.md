# PHP bomb

This repository contains a very simple script that will make the client download a huge file containing zeros.

## Why?

Its main purpose is to set a trap for the bots that look for vulnerabilities in you application.

For instance, imagine you see periodically in your logs some visits on `/wp-login.php` (even if your app doesn't use WordPress). Then, put that script at the given place (or create a route)! If your app runs WordPress, you may also want to filter the route by IP address to make sure you won't fall in your own trap!

This small script has been created after seeing [that conversation](https://mastodon.gougere.fr/@bortzmeyer/101198778188008770) on Mastodon.

## How?

The script is really simple: it just infinitly generates zeros and send them to the client. It also makes sure it won't saturate your server's CPU by making some pauses of 250ms.

