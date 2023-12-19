
<template>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item" v-for="(menuItem, index) in menuItems" :key="index">
                <template v-if="hasChildren(menuItem)">

                    <router-link class="nav-link" :to="menuItem.link" :data-target="'#ui-basic-' + index"
                        :aria-controls="'ui-basic-' + index" :aria-expanded="isExpanded(index)"
                        @click.prevent="toggleCollapse(index)">
                        <i :class="menuItem.icon"></i>
                        <span class="menu-title">{{ menuItem.name }}</span>
                        <i class="menu-arrow"></i>

                    </router-link>
                    <div class="collapse" :id="'ui-basic-' + index" :class="{ show: isExpanded(index) }">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item" v-for="(childItem, childIndex) in menuItem.children" :key="childIndex">
                                <router-link class="nav-link" :to="childItem.link">
                                    {{ childItem.name }}
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </template>
                <template v-else>
                    <router-link class="nav-link" :to="menuItem.link">
                        <i :class="menuItem.icon"></i>
                        <span class="menu-title">{{ menuItem.name }}</span>
                    </router-link>
                </template>
            </li>
        </ul>
    </nav>
</template>
  
<script>
export default {
    name: 'Sidebar',
    props: {
        menuItems: {
            type: Array,
            default: () => [
                {
                    link: '/dashboard',
                    name: 'Dashboard',
                    tooltip: 'Dashboard',
                    icon: 'icon-grid menu-icon',
                },
                {
                    link: '',
                    name: 'GSS Section',
                    tooltip: 'General Service Section',
                    icon: 'icon-layout menu-icon',
                    children: [
                        {
                            link: '/gss/AnnualProcurementPlan',
                            name: 'APP',
                            tooltip: 'Buttons',
                            icon: 'icon-grid menu-icon',
                        },
                        {
                            link: '/gss/procurement',
                            name: 'Procurement',
                            tooltip: 'Buttons',
                            icon: 'icon-grid menu-icon',
                        },
                      

                    ],
                },
                {
                    link: '/dashboard',
                    name: 'RICTU',
                    tooltip: 'RICTU',
                    icon: 'icon-grid menu-icon',
                    children: [
                        {
                            link: '/gss/AnnualProcurementPlan',
                            name: 'Reports and Statistics',
                            tooltip: 'Buttons',
                            icon: 'icon-grid menu-icon',
                        },
                        {
                            link: '/gss/procurement',
                            name: 'ICT TA Tickets',
                            tooltip: 'Buttons',
                            icon: 'icon-grid menu-icon',
                        },
                      

                    ],
                },
              

                // Add more menu items as needed
            ],
        },
    },
    methods: {
        hasChildren(item) {
            return item.children && item.children.length > 0;
        },
        isExpanded(index) {
            // Implement your logic to check if the item is expanded
            // For example, you can store the expanded items in a separate data property and check against it.
            // Here, we assume that expandedItems is a data property that stores the expanded items.
            return this.expandedItems.includes(index);
        },
        toggleCollapse(index) {
            // Implement your logic to toggle the collapse state of the item
            // For example, you can update the expandedItems data property.
            // Here, we assume that expandedItems is a data property that stores the expanded items.
            if (this.isExpanded(index)) {
                // Item is already expanded, collapse it
                const itemIndex = this.expandedItems.indexOf(index);
                this.expandedItems.splice(itemIndex, 1);
            } else {
                // Item is collapsed, expand it
                this.expandedItems.push(index);
            }
        },
    },
    data() {
        return {
            expandedItems: [], // Store the expanded items here
        };
    },
};
</script>
  