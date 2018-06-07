@echo off
echo Checking controls (FIRST ITEM SHOULD FAIL SYNTAX CHECK)
for %%n in (C:\xampp\htdocs\restaurantproject_muskaanbakshi_9105462916\control\*.php) do php -l %%n
echo Done Controls& echo.& echo.

echo Checking models
for %%n in (C:\xampp\htdocs\restaurantproject_muskaanbakshi_9105462916\model\*.php) do php -l %%n
echo Done Models& echo.& echo.

echo Checking admin
for %%n in (C:\xampp\htdocs\restaurantproject_muskaanbakshi_9105462916\view\admin\*.php) do php -l %%n
echo Done Admin& echo.& echo.

echo Checking manager
for %%n in (C:\xampp\htdocs\restaurantproject_muskaanbakshi_9105462916\view\manager\*.php) do php -l %%n
echo Done Manager& echo.& echo.

echo Checking pages
for %%n in (C:\xampp\htdocs\restaurantproject_muskaanbakshi_9105462916\view\pages\*.php) do php -l %%n
echo Done Pages& echo.& echo.

echo Completed compile tests!& echo.& echo.

pause