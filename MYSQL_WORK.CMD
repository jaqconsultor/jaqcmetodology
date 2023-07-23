@echo off
cd "MySQL Workbench 8.0 CE"
REM Portable Startscript for MySQL Workbench
SET USERPROFILE=%CD%
IF NOT EXIST "%CD%\AppData\Roaming\MySQL\Workbench" MD "%CD%\AppData\Roaming\MySQL\Workbench"
START MySQLWorkbench.exe
REM This close the DOS Box after starting the Workbench
EXIT