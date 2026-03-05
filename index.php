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
        input { width: 80%; padding: 12px; margin: 20px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { 
            background: #0070d2; color: white; border: none; 
            padding: 12px 20px; border-radius: 4px; cursor: pointer; font-size: 16px; width: 80%;
        }
        button:hover { background: #005fb2; }
        .status { margin-top: 15px; color: #666; font-style: italic; }
    </style>
</head>
<body>

<div class="pms-container">
    <h1>Oracle Opera PMS</h1>
    <p>Operational Stay Management</p>
    <hr>
    <input type="text" id="guestName" placeholder="Enter 'Malania Lexington'">
    <br>
    <button onclick="popSalesforce()">Check In Guest</button>
    <div id="status" class="status">Waiting for input...</div>
</div>

<script>
    function popSalesforce() {
        const inputName = document.getElementById('guestName').value.toLowerCase();
        const statusDiv = document.getElementById('status');

        if (inputName.includes("malania")) {
            statusDiv.innerText = "Match Found. Opening Golden Profile...";
            
            // The exact Salesforce Contact ID you provided
            const contactId = "003Ws00000SnTr2IAF";
            
            // YOU MUST CHANGE 'yourdomain' TO YOUR ACTUAL SALESFORCE DOMAIN PREFIX
            const targetUrl = `https://storm-136b1734bb07cf.my.salesforce.com/lightning/r/Contact/${contactId}/view`;
            
            // Forces the browser to open the target URL
            window.open(targetUrl, "SalesforceSidebar"); 
            
        } else {
            statusDiv.innerText = "Guest not found in Unified Profile.";
        }
    }
</script>

</body>
</html>
