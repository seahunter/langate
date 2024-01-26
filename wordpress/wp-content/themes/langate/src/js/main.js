class Langate {
	nextLink;

	constructor() {
		this.context = document;
		this.itemsLIST = '.articles-list';
		this.loadMoreButtonId = 'loadMore';
		this.loadMoreListener();
		this.getNextPageURL();
	}

	loadMoreListener() {
		const button = document.getElementById(this.loadMoreButtonId);

		if (button) {
			button.addEventListener('click', () => this.loadPosts());
		}
	}

	async loadPosts() {
		await fetch(this.nextLink)
			.then(response => response.text())
			.then(html => {
				const parser = new DOMParser();
				this.context = parser.parseFromString(html, 'text/html');
				this.insertPosts()
				this.getNextPageURL();
			})
		;
	}

	getNextPageURL() {
		const nextLink = this.context.querySelector('.load-more-wrapper a')

		if (!nextLink) {
			this.nextLink = false;
			this.hideLoadMore()
		} else {
			this.nextLink = nextLink.getAttribute("href");
		}
	}

	insertPosts() {
		const wrapper = this.context.querySelector(this.itemsLIST);
		document.querySelector(this.itemsLIST).innerHTML += wrapper.innerHTML;
	}

	hideLoadMore() {
		document.getElementById(this.loadMoreButtonId).style.visibility = 'hidden';
	}
}

new Langate();
