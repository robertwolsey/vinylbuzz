E-MailRelay Windows
===================

Command-line options
--------------------
There are some differences in the command-line options when running the
E-MailRelay server on Windows. These include:
* The "--syslog" option refers to the Windows Event Viewer's Application log.
* The "--no-daemon" option is used to disable the icon in the system tray.
* The "--hidden" option hides all windows and suppresses message boxes (requires "--no-deamon").
* The "--peer-lookup" option can be used to add extra information to envelope files for local clients.

Setup program
-------------
Installing E-MailRelay on Windows should be straightforward if you have the
setup program "emailrelay-setup.exe" and its associated "payload" data file.

Run "emailrelay-setup.exe" as an administrator if you are going to be installing
into sensitive directories like "Program Files". If you don't want to run it as 
an administrator then you will have to rename it to (eg.) "emailrelay-gui.exe" to 
avoid triggering the UAC mechanism.

The setup GUI will take you through the installation options and then install
the run-time files into your chosen locations.

Manual installation
-------------------
In summary, the manual installation process for Windows for when you do not have
the self-extracting setup program, is as follows:
* Create a new program directory "c:\Program Files\emailrelay"
* Copy the packaged files into "Program Files\emailrelay"
* Create a new spool directory "c:\windows\system32\spool\emailrelay"
* Create a new text file, eg. "c:\emailrelay.auth", to contain account details
* Add your account details to "emailrelay.auth" with a line like "client login myaccount mypassword"
* Drag "emailrelay.exe" onto the desktop to create a shortcut for the server.
* Add "--as-server --verbose" to the server shortcut properties in the "target" box.
* Drag again to create a shortcut for the forwarding client.
* Add "--as-client myisp.net:smtp --hidden --client-auth c:\emailrelay.auth" to the client shortcut.

Move shortcuts to "Startup" folders as necessary.

Running as a service
--------------------
If you are installing manually you can set up E-MailRelay as a service so that
it starts up automatically at boot-time. You must first have a one-line batch
file called "emailrelay-start.bat" in the main E-MailRelay directory containing
the full E-MailRelay server command-line. Then just run
"emailrelay-service --install" to install the service.

When the E-MailRelay server is run in this way the "--no-daemon" and "--hidden"
options are added automatically to whatever is in the "emailrelay-start" batch
file so that there is no user interface. (The "--no-daemon" option changes the
interface from using the system-tray to using a normal window, and the
"--hidden" option suppresses the window and any message boxes.)

Note that the batch file and the main E-MailRelay executable must be in the same
directory; the service wrapper reads the batch file in order to assemble the
correct command-line for running the E-MailRelay server, so it needs to know
where to find it.

If you need to run multiple E-MailRelay services then pass a unique service name
and display name on the "emailrelay-service --install <name> <display-name>"
command-line.

The service name you give is used to derive the name of the "<name>-start.bat"
batch file that contains the E-MailRelay server's command-line options, so you
will need to create that first.

For example:
	copy emailrelay-start.bat emailrelay-client-start.bat
	edit emailrelay-client-start.bat
	emailrelay-service --install emailrelay-client "E-MailRelay Client"
	copy emailrelay-start.bat emailrelay-server-start.bat
	edit emailrelay-server-start.bat
	emailrelay-service --install emailrelay-server "E-MailRelay Server"

Diagnostics
-----------
E-MailRelay normally writes errors and warnings into the Windows Event Log,
which you can view by running "eventvwr.exe" or going to
"ControlPanel"->"SystemAndSecurity"->"AdministrativeTools"->"EventViewer"; from
there look under "Windows Logs" and "Application".

You can increase the verbosity of the logging by adding the "--verbose" option
to the E-MailRelay command-line, typically by editing the "emailrelay-start.bat"
batch script.

Telnet
------
If you want to test E-MailRelay using telnet (as described elsewhere) then you
might need to enable the Windows telnet client using
"ControlPanel"->"ProgramsAndFeatures"->"TurnWindowsFeaturesOnAndOff".

Building from source
--------------------
E-MailRelay can be compiled using various versions of Microsoft Visual Studio
C++ (MSVC) or MinGW.

A Visual Studio "solution" for MSVC 2012 is provided in the "src" directory to
build the main E-MailRelay executable, although it does not include a project
for the Qt-based installation/configuration GUI.

For a complete build that includes the E-MailRelay GUI use MinGW, following the
instructions in "src/mingw-common.mak" and "doc/developer.txt".



Copyright (C) 2001-2013 Graeme Walker <graeme_walker@users.sourceforge.net>. All rights reserved.
