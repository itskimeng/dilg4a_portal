<style>

</style>
<template>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item" v-for="(menuItem, index) in menuItems" :key="index">
                <template v-if="hasChildren(menuItem)">
                    <router-link class="nav-link" :to="menuItem.link" :data-target="'#ui-basic-' + index"
                        :aria-controls="'ui-basic-' + index" :aria-expanded="isExpanded(index)"
                        @click.prevent="toggleCollapse(index)">
                        <font-awesome-icon :icon="menuItem.icon" />
                        <span class="menu-title"> {{ menuItem.name }}</span>
                        <i class="menu-arrow"></i>
                    </router-link>
                    <div class="collapse" :id="'ui-basic-' + index" :class="{ show: isExpanded(index) }">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item" v-for="(childItem, childIndex) in menuItem.children" :key="childIndex">
                                <router-link class="nav-link" :to="childItem.link">
                                    <font-awesome-icon :icon="childItem.icon" />&nbsp;
                                    {{ childItem.name }}
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </template>
                <template v-else>
                    <router-link class="nav-link" :to="menuItem.link">
                        <font-awesome-icon :icon="menuItem.icon" />
                        <span class="menu-title">{{ menuItem.name }}</span>
                    </router-link>
                </template>
            </li>
        </ul>
    </nav>
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faCartShopping,faGauge,faList,faChartSimple, faClipboardList, faStore,faBook,faAward } from '@fortawesome/free-solid-svg-icons';

library.add(faCartShopping,faGauge,faList,faChartSimple,faClipboardList,faStore,faBook,faAward);

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
                    icon: 'gauge',
                },
                {
                    link: '/dashboard',
                    name: 'Calendar',
                    tooltip: 'Dashboard',
                    icon: 'gauge',
                },
                {
                    link: '',
                    name: 'Procurement',
                    tooltip: 'General Service Section',
                    icon: 'cart-shopping',
                    children: [
                        {
                            link: '/procurement/AnnualProcurementPlan',
                            name: 'APP',
                            tooltip: 'Buttons',
                            icon: 'list',
                        },
                        {
                            link: '/procurement/index',
                            name: 'Procurement',
                            tooltip: 'Buttons',
                            icon: 'store',
                        },
                        {
                            link: '/procurement/rfq/index',
                            name: 'R.F.Q',
                            tooltip: 'Buttons',
                            icon: 'book',
                        },
                        {
                            link: '/procurement/abstract/index',
                            name: 'Awarding',
                            tooltip: 'Buttons',
                            icon: 'award',
                        },
                        {
                            link: '/procurement/statistic',
                            name: 'Statistics',
                            tooltip: 'Buttons',
                            icon: 'chart-simple',
                        },
                        {
                            link: '/procurement/index',
                            name: 'Reports',
                            tooltip: 'Buttons',
                            icon: 'clipboard-list',
                        },
                    ],
                },
                
            ],
        },
    },
    methods: {
        hasChildren(item) {
            return item.children && item.children.length > 0;
        },
        isExpanded(index) {
            return this.expandedItems.includes(index);
        },
        toggleCollapse(index) {
            if (this.isExpanded(index)) {
                const itemIndex = this.expandedItems.indexOf(index);
                this.expandedItems.splice(itemIndex, 1);
            } else {
                this.expandedItems.push(index);
            }
        },
    },
    data() {
        return {
            expandedItems: [],
        };
    },
    components: {
        FontAwesomeIcon,
    },
};
</script>
