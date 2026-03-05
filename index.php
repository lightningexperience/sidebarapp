<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mock Oracle Opera PMS</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #eef2f5; padding: 40px; color: #333; }
        .pms-container { background: #fff; padding: 30px; border-top: 5px solid #c00; border-radius: 4px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 450px; margin: auto; }
        h1 { font-size: 22px; color: #c00; margin-top: 0; }
        label { display: block; margin: 15px 0 5px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { background: #0070d2; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; width: 100%; margin-top: 20px; font-size: 16px; }
        button:hover { background: #005fb2; }
        .status { margin-top: 15px; font-style: italic; color: #666; font-size: 14px; text-align: center; }
    </style>
</head>
<body>

<div class="pms-container">
    <h1>Oracle Opera PMS</h1>
    <p>Operational Stay Management</p>
    <hr>
    
    <label for="guestName">Guest Check-In / Search:</label>
    <input type="text" id="guestName" placeholder="Enter guest name (e.g., Malania Lexington)">
    
    <button onclick="sendSignal()">Select Guest & Pop Sidebar</button>
    
    <div id="statusMsg" class="status">Waiting for input...</div>
</div>

<script>
    function sendSignal() {
        const name = document.getElementById('guestName').value;
        const status = document.getElementById('statusMsg');
        
        // Mock Database logic for the demo: 
        // In reality, MuleSoft would resolve this to a real Salesforce Contact ID
        let contactId = "";
        if (name.toLowerCase().includes("malania lexington")) {
            contactId = "003XXXXXXXXXXXXXXX"; // REPLACE with the real Salesforce Contact ID for Malania
            status.innerText = "Signal sent to MuleSoft for: " + name;
        } else {
            status.innerText = "Guest not found in Golden Profile sync.";
            return;
        }

        // The "Magic" Link: For this mockup, we send a browser-level message.
        // The Sidebar listener (LWC) would catch this event and refresh.
        const message = {
            type: "GUEST_SELECTED",
            contactId: contactId,
            guestName: name
        };

        // Communication method discussed: browser postMessage
        window.top.postMessage(message, "*"); 
        
        console.log("PostMessage sent for Contact ID: " + contactId);
    }
</script>

</body>
</html>
