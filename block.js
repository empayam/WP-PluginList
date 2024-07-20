(function (blocks, element) {
    var el = element.createElement;

    blocks.registerBlockType('plugin-list/block', {
        title: 'Plugin List',
        icon: 'admin-plugins',
        category: 'widgets',
        edit: function () {
            return el('p', {}, 'Plugin List Block - Preview');
        },
        save: function () {
            return null; // محتوا در سمت سرور رندر می‌شود
        },
    });
})(window.wp.blocks, window.wp.element);