#!/bin/bash
cd /example_user/ && /example_user/.nvm/versions/node/v18.20.3/bin/node /example_user/node_modules/meshcentral/meshctrl.js --url wss://example.domain.com:443 --loginuser USERNAME --loginpass PASSWORD GenerateInviteLink --group EXAMPLE-GROUP --hours 1
