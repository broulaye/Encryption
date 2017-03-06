# Project 5 - Encryption

Time spent: 6 hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [x]  Required: Decrypt the government message
  * [x]  Required: Encrypt a response and include in this README
  *I heard about your current situation. Do you know who hacked APEX? -- The Chairman
  Yes our nemesis Dark Shadow did.

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  * [x]  Required: Verify the message
  * [x]  Required: Include a response message in this README
  * Cannot access APEX from this location. Send new agent codename and public key so I can contact. 
    Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow
    
    Encrypted Message:
    GbEdyaq3k3aF2fdI+z9kXcH52/6nsf2FSvihebdRoDMHYftYvtKOHgPx2lQPDnkU1Cbpnl6xTuriXC2g0LcONaWe7wRN6mwCIIslC/8+ZRBYjwsrfXufJXpsrTZ2X27DDin5g9bEcGLy+KyLoZ1xCWb5/bRiuQ/XaUANjn0a6h743YGxThYgPzk+AnoD/cbo1Lcyt/qIJ+O4tL6lKoDlfyb63Kf6qs2MRZBDbKy+EQ070Y6mvHuFWzoMEbowGBhHCodihmAUZ/Fu9lyUbdIC81O9trTOZNrmE4plStDKsVVSbvaaptDwfOWDf5/pjOx62TQuxW5o7F5S+KbPPLon6A==

    Signature:
    Idyl5riifZGPMpAVWD12HhGlG7sMnOYTfOYHvQKcCS9btWdjZnIlB3fyOWeDs/YsKX7JN+tjsqNCH1R1vhxzbNWhb3rPGMFNz4DprZLOOcx2LiXXUNjs/mZG9njRmzA9Doj8cPCVQYg7YhPh5KhzmFPre0LBis9LsZ3F6a0m8lZ7NEzQnPwCRFrZbjgxxTIaWIccssfNcevkq9zuKbt8J5Gykd6KTlvvpkKFp7dSi5wK/7uhfpKioaxpzHQRmlVo4ETLbkASlFenZfjLNih9Iowfnk+MjkNpRV7kR5fD7lW0p865SAgkL1CkPNcdFUl667G1JSRsNAdsWVE6thQLLA==

    Public Key:
    -----BEGIN PUBLIC KEY-----
    MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoxFL/0+24gomsJJj/75L
    ETN3xq8uz/gY+l+/Hn6fqlIiXB4H2bfA9cTfkjDa7xEEFkIZHhrk0uoQoDYJ48AY
    tMHIhkDvdnNsM1V9Mq47Ym/PjgklfgTvYNYrxmmaX4YNQkJxHW9rxfoRUy0Uxh3b
    Sqr+vinxFQvKbjzZY6Ozv1LI+rPSkJhqZKZfszVbMZbogamZIXAKZMAQOoIwRR42
    jX10J9qT4IeqsSa1LiwfR6nrDim68v6i02KyLAYX8A3F7nnquvwliQJXAMP6wcNJ
    nO1r5pRGdHlY7RyYS5KDvfHIKrQVnuOw4K3AW6EPTWHMJJzov8aMeFKruHFoBTKt
    KQIDAQAB
    -----END PUBLIC KEY-----

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
  * [x]  Required: Identify the double agent: Natasha

The following objectives are **optional**:

* Bonus Objective 1\.
  * [x]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [x]  Write a report of your discoveries (longer than 300 characters).
  * [x]  Compose a secure email for sending over an insecure network.
  * [x]  Include the email with your encrypted report in this README.
  * The key to decrypt the message below is encrypted using an asymmetric algorithm:
  x5LZP7Wiin5qa9Lz5fc4HfFjBPIf/vMoET3cdRoRgmFqqGbWGGKpoMyCsYuqOLsWk1Ec3Tib+ASjTRJjc7qZ6t1FMfHsI0HyHQ8rHph0nqIcmNqY5GDExndIC4gWFQxSHndU1s8AdX4DADZsm3xjuIMFBBNMOccYZba+18mCnaVGap4Z+7I18iKOFDvyaw0VvvWIUSePEx5rndUTnY+03SLymGr7m6L58FzAYQMt75miezMCh7p3951dsg8VfaB02GEgdJZ/8zJT3VveeIEAkgtVv1eXJQdCFJUwAsEk+lrENO1GsHKQqzQsjUR473rbVswVWvPLccMZV1iRqXfuppawa9uTye2WiXzY/MZ2GMbDF58p6qtCCOA9qNYuluHEgZt5awHLse2w0covXkFm9M1FE+DKEo0REXfJGiFNp7PU5V2uNEHu47r//bQUHct6

  the following key to decrypt the email is encrypted using the company public key:
  XeI4Pk2KMN4dCq+v87ky1k4XKRPZszhsvPJdgAdmQ2TApKroPLMDHiD7iiIPhZZ4dtZ1QUXs3bi0dy4haYqD2lecihandSmrTm4mrsTCFCj3tbgeq8U6qwZfhbL4AOIKIUu6VrO4gasOsDc1sFXJ0ZBtNLvDSimn+MWRfdLylEuG5xFI4rnBorJYLJURJVOSa+okT57HJYO5IizBpVaED3Jh8spED54nNXta+UBuTIZgys5IlF4ENfRVm6QuQLCluDQnxYPGmdzTIm72lB9pvDr1+4P06YN+OhgDzK/e9xV0c9IJ2Lh9YxaeKO7tAKl3dRA3Aq78Z9wrwij8j68Q1g==

  Signature to verify the mail:
  SUOKE6II2Z2qaEEO7sJybk4aOtRQopq8JYDuPkaa1+jwk3vBybTvnhnD2DLUZxNZg8/d78uSAywNmqmYWImeH9Q57i9fBSmWqs8ZCkoHJDADExcRpHk8HgaW5zPJllBQWObgznyUZH829eRnB9ISPbVoVkM2vLCupxiipgS0zTGL4ZPp5fzPZspAtxMwsKq3qVJZfcpnuq66RbScY5RtGUFa+mXWVcdXMmUMzhBbCkIre/MaSdPSxp+mJqdSc+LjwbnaxKQ8GQbbG5ymbOT4EIr34DthblvNBy9aREbxFHVwMS+hVrav0p1o+2U6UZZk6HqM1WeWS1O1SaSFSzaXuQ==


* Bonus Objective 3\.
  * [x]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [x]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright 2017 Broulaye Doumbia

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
