# Project 5 - Encryption

Time spent: 7 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [*]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [*]  Required: Decrypt the government message
	I heard about your current situation. Do you know who hacked APEX? -- The Chairman	
  * [*]  Required: Encrypt a response and include in this README
	Q/EQ4gUm2QV0g5rpWn8J1benXdA7YNYAQYbp/n2Qt5M=
3\. Generate Public-Private Keys
  * [*]  Required: Repair the key generator code
  * [*]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [*]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [*]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [*]  Required: Decrypt the message
	Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow
  * [*]  Required: Verify the message
  * [*]  Required: Include a response message in this README
    message: 
	aKhlEfQ0HsjfbNSQG1Dhfnb4biWQi3PsimT1SDEN0JeVPUYUbb7prn/jOqY6Q7EfCwIxV/0pWoY4kkblp0/EMEqFYfPRm5EWv7Ougr4/O0m+hu+h/7IR0zB1jJa0dls7afIYQbD7EawXyna+jwWp9Hp1B2xMXXNa5qq8tzcNZIuXtelpvqsjb+/N3Vgmd5/WrclgMk/0FqcliZ+YqpWGX6Sv/ZQ0Q4UyfTHvz5v+o9MtuJlSNVmvda9HGC4f3R3MKDBfQ362Xjkr89PdDvEHWk0kTaQLgumYL1BYbPWiV2t9XEDKe3rcwuNNNzJrnGiu0wR7LIKpPBPqLstQiL1ugA==
	
	signature: 
	VOUP+R7Z+KsAMH5F/eScelZwCJQiDz4Ok4m20qBAooCd8VzRhNWNB172J+1MrfGewJV0q6DKRSXAnfvSv+hGofSQeG0HyMRDgn0sjFNn8guanDtRry/7rKFloT9Yws3icQmguevlz0s+aozDgh5B1YsQGvhZOwNf8RRLEUsH4+K4yNN7yB6At6Ogcw5+vxUhR5v0ap6v7I6HOo/cOcrAf03Ybrb2kbC3Tw7AA+Xmyxs8MskPa3pog4/zVdIxFu/HSbngOhjOGpcsnyTwCkjDEB7PGfej5LwdKyb1P5GvplRkGC/6y9clHTb4Dk00o4zMXPlQwd+umLWTJeUWR1vQIw==

7\. Agent Messages
  * [*]  Required: Repair the dropbox code
  * [*]  Required: Repair the messages area
  * [*]  Required: Display encrypted messages for all agents
  * [*]  Required: Messages indicate whether the message signature is valid
  * [*]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [*]  Required: Decrypt as many email messages as possible
  * [*]  Required: Identify the double agent: 
  Today I was able to sneak several XSS vulnerabilities onto one of the encrypt/decrypt pages.
  Let me know before you go inside. I'll create a distraction. - Austin
  The SQL injection we discussed is in place. Just search for an agent. 
The following objectives are **optional**:

* Bonus Objective 1\.
  * []  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [*]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [yyyy] [name of copyright owner]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.