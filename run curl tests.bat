@echo off

echo logging in and getting session & echo.

curl -c cookies.txt -d "curltest=blueamerica13" "http://127.0.0.1/restaurantproject_muskaanbakshi_9105462916/control/session.php"

echo & echo.Testing email checking...& echo.
echo First test, email that exists, should expect {"emailExists": true}:
curl -c cookies.txt -d "curltest=blueamerica13" "http://127.0.0.1/restaurantproject_muskaanbakshi_9105462916/control/register_check_email_exists.php?email=admin@banyan.com"

echo & echo.Second test, email that doesn't exist, should expect {"emailExists": false}:
curl -c cookies.txt -d "curltest=blueamerica13" "http://127.0.0.1/restaurantproject_muskaanbakshi_9105462916/control/register_check_email_exists.php?email=invalidEmail"

echo & echo.& echo.& echo.Password testing...& echo.
echo Test password matches for admin, should expect {"passwordMatches": true}:
curl -c cookies.txt -d "curltest=blueamerica13" "http://127.0.0.1/restaurantproject_muskaanbakshi_9105462916/control/check_password_matches.php?userID=0&password=Password1"

echo & echo.Test Test password doesn't match for admin, should expect {"passwordMatches": false}:
curl -c cookies.txt -d "curltest=blueamerica13" "http://127.0.0.1/restaurantproject_muskaanbakshi_9105462916/control/check_password_matches.php?userID=0&password=heck"

echo & echo.& echo.& echo.& echo.Tests complete...& echo.& echo.


Pause
