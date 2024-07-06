# On-Demand Remote Support for MeshCentral

On-Demand Remote Support for MeshCentral is an open-source project designed to streamline remote support by integrating with MeshCentral. This tool allows users to generate and use support codes for remote access, making it easy for technicians to provide assistance without complex setup.

## Features
- **Generate Support Codes**: Easily create unique support codes for users to initiate remote sessions.
- **Secure Access**: Ensure secure access to remote support sessions through code validation.
- **Integration with MeshCentral**: Seamlessly integrates with MeshCentral for robust remote support capabilities.

## Screenshots
### Main Application Window
![Main Application Window](https://github.com/BitNixLLC/OnDemandRemote/blob/main/images/main.png)

### Code Administration
![Code Administration](https://github.com/BitNixLLC/OnDemandRemote/blob/main/images/code_gen.png)

## Usage
1. **Start the Application**:
   Deploy the application on your web server.

2. **Generate Codes**:
   Access the admin panel to generate support codes.

3. **User Access**:
   Users can enter their support codes on the main application page to initiate remote support sessions.

## Temporary URL Generation
Once the correct code is entered, the script generates a temporary URL from MeshCentral. This URL allows users to download the appropriate agent for remote support. This ensures that the agent download is secure and specific to the session initiated by the entered support code.

## Environment
- **MeshCentral**: Default install via Node.
- **Web Server**: Apache2
- **PHP**: Version 8

## Security Notice
This repository is provided as an example. Proper security measures must be taken when executing bash scripts from PHP. This includes but is not limited to:
- Sanitizing input to prevent command injection attacks.
- Keeping the system and software up to date with security patches.
- Implementing authentication and authorization mechanisms to ensure only authorized users can execute scripts.
- Logging and monitoring script execution to detect and respond to any suspicious activities.
- Ensuring scripts with credentials and files that can potentially leak sensitive information are not within the public directory.

This code repository is intended to show the raw code as an example. Our organization, being primarily open source, maintains a level of openness with our clientele by demonstrating code running on our systems. Proper security and operational procedures must be followed to secure the environment when deploying this code. BitNix does not create and maintain these repositories for other users to directly use; they are intended for openness. However, the code itself may be used by anyone as per the Unlicense.

## License
This project is licensed under the Unlicense. See the [LICENSE](LICENSE) file for details.

## Acknowledgements
- [MeshCentral](https://meshcentral.com/) for providing a robust remote management solution.
