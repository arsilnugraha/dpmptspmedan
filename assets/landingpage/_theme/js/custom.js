document.addEventListener("DOMContentLoaded", function () {
	// Replace Bootstrap's collapse functionality with custom implementation
	const collapseButtons = document.querySelectorAll(".collapse-button");

	collapseButtons.forEach((button) => {
		button.addEventListener("click", function (e) {
			e.preventDefault();

			// Get target from href attribute
			const targetId = this.getAttribute("href").substring(1);
			const targetCollapse = document.getElementById(targetId);

			// Toggle active class on button
			this.classList.toggle("active");

			// Toggle collapse
			if (targetCollapse.classList.contains("show")) {
				targetCollapse.classList.remove("show");
			} else {
				targetCollapse.classList.add("show");
			}
		});
	});

	// View toggle functionality
	const viewButtons = document.querySelectorAll(".view-btn");

	viewButtons.forEach((button) => {
		button.addEventListener("click", function () {
			// Update active button
			viewButtons.forEach((btn) => {
				btn.classList.remove("active");
				btn.classList.remove("btn-primary");
				btn.classList.add("btn-outline-primary");
			});

			this.classList.add("active");
			this.classList.add("btn-primary");
			this.classList.remove("btn-outline-primary");

			// Show/hide appropriate view
			const viewType = this.dataset.view;
			const detailViews = document.querySelectorAll(".detail-view");
			const tenantViews = document.querySelectorAll(".tenant-view");

			if (viewType === "detail") {
				detailViews.forEach((view) => (view.style.display = "block"));
				tenantViews.forEach((view) => (view.style.display = "none"));
			} else {
				detailViews.forEach((view) => (view.style.display = "none"));
				tenantViews.forEach((view) => (view.style.display = "block"));
			}
		});
	});
});
