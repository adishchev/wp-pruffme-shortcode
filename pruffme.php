<html><head><script src="https://pruffme.com/api/library.js" data-name="pruffmeapi" data-type="webinar"></script>
<script>
	function pruffmeAPICallback(callback) {
		pruffmeapi.setWebinarHash("<?= htmlspecialchars($_GET['hash']) ?>");
		pruffmeapi.setExitCallback(function() {
			pruffmeapi.logoutWebinar(function() {
				document.location.reload();
			})
		});
		callback();
	}
</script></head><body></body></html>