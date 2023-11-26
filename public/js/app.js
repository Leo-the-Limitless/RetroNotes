document
    .getElementById("tabbable-note")
    .addEventListener("keydown", function (e) {
        if (e.key === "Tab") {
            e.preventDefault();

            // Insert a tab character at the current cursor position
            var start = this.selectionStart;
            var end = this.selectionEnd;

            // Insert a tab character at the current cursor position
            this.value =
                this.value.substring(0, start) +
                "\t" +
                this.value.substring(end);

            // Move the cursor to the right by the length of the tab character
            this.selectionStart = this.selectionEnd = start + 1;
        }
    });
