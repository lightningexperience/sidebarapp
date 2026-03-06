<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oracle Opera PMS Mockup</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #eef2f5; padding: 40px; }
        .pms-container { 
            background: #fff; padding: 30px; border-top: 5px solid #c00; 
            border-radius: 4px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); 
            width: 450px; margin: auto; text-align: center;
        }
        button { 
            background: #0070d2; color: white; border: none; 
            padding: 15px 20px; border-radius: 4px; cursor: pointer; font-size: 16px; width: 100%; font-weight: bold;
        }
        button:hover { background: #005fb2; }
        .status { margin-top: 20px; color: #666; font-style: italic; }
        .guest-info { text-align: left; background: #f9f9f9; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px; border-radius: 4px;}
    </style>
</head>
<body>

<div class="pms-container">
    <h1>Oracle Opera PMS</h1>
    <p>Operational Stay Management</p>
    <hr>
    
    <div class="guest-info">
        <strong>Next Arrival:</strong><br>
        Name: Malania Lexington<br>
        Status: VIP - Golden Profile Sync Active
    </div>

    <button onclick="popSidebarHack()">Check In: Malania Lexington</button>
    
    <div id="status" class="status">Waiting for check-in...</div>
</div>

<script>
    function popSidebarHack() {
        document.getElementById('status').innerText = "Event Bus Match. Popping Native Sidebar...";
        
        // This broadcasts the signal. 
        // The content.js script in your Edge extension will "hear" this and force the sidebar open.
        window.postMessage({ type: "OPEN_SALESFORCE_SIDECAR" }, "*");
        
        console.log("Signal sent to Salesforce Sidecar extension.");
    }
</script>

</body>
</html>
