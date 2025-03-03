document.getElementById('filter_device_id').addEventListener('change', 
    function() {
        let deviceId = this.value || this.options[this.selectedIndex].value;
        window.location.href = window.location.href.split('?')[0] + '?device_id=' + deviceId;
    }
);
