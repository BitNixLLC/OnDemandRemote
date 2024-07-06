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

## License
This project is licensed under the Unlicense. See the [LICENSE](LICENSE) file for details.

## Acknowledgements
- [MeshCentral](https://meshcentral.com/) for providing a robust remote management solution.
