<x-layouts.app>
    <div class="w-full flex items-start gap-8">
        <div class="w-full space-y-6">
            <div class="flex items-center justify-between">
                <flux:heading level="2" size="xl" class="flex items-center justify-center">
                    Information Order's<flux:badge class="ms-2">5</flux:badge>
                </flux:heading>
                <div class="flex items-center space-x-4">
                    <flux:button icon="chevron-double-left" variant="primary" class="rounded-full!" />
                    <flux:button icon="chevron-double-right" variant="primary" class="rounded-full!" />
                </div>
            </div>
            <div class="grid grid-cols-4 gap-6">
                <a href="" class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <flux:icon.receipt-percent class="me-2 size-8" />
                            <flux:heading level="6" size="lg">#213219</flux:heading>
                        </div>
                        <flux:text>4 Items</flux:text>
                    </div>
                    <flux:badge variant="solid" color="green" class="mt-2 w-full rounded-full! flex items-center justify-center">
                        <flux:icon.check-circle class="me-2" />

                        Paid
                    </flux:badge>
                </a>
                <a href="" class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <flux:icon.receipt-percent class="me-2 size-8" />
                            <flux:heading level="6" size="lg">#213219</flux:heading>
                        </div>
                        <flux:text>4 Items</flux:text>
                    </div>
                    <flux:badge variant="solid" color="green" class="mt-2 w-full rounded-full! flex items-center justify-center">
                        <flux:icon.check-circle class="me-2" />

                        Paid
                    </flux:badge>
                </a>
                <a href="" class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <flux:icon.receipt-percent class="me-2 size-8" />
                            <flux:heading level="6" size="lg">#213219</flux:heading>
                        </div>
                        <flux:text>4 Items</flux:text>
                    </div>
                    <flux:badge variant="solid" color="green" class="mt-2 w-full rounded-full! flex items-center justify-center">
                        <flux:icon.check-circle class="me-2" />

                        Paid
                    </flux:badge>
                </a>
                <a href="" class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <flux:icon.receipt-percent class="me-2 size-8" />
                            <flux:heading level="6" size="lg">#213219</flux:heading>
                        </div>
                        <flux:text>4 Items</flux:text>
                    </div>
                    <flux:badge variant="solid" color="yellow" class="mt-2 w-full rounded-full! flex items-center justify-center">
                        <flux:icon.exclamation-circle class="me-2" />

                        Not Paid
                    </flux:badge>
                </a>
            </div>

            <flux:separator />

            <div class="flex items-center justify-between">
                <flux:heading level="2" size="xl" class="flex items-center justify-center">
                    Menu Items<flux:badge class="ms-2">8</flux:badge>
                </flux:heading>
                <div class="flex items-center space-x-4">
                    <flux:button icon="magnifying-glass" variant="primary" class="rounded-full!" />
                    <flux:button icon="adjustments-horizontal" variant="primary" class="rounded-full!" />
                </div>
            </div>

            <div x-data="{ selectedTab: 'all' }" class="w-full">
                <div x-on:keydown.right.prevent="$focus.wrap().next()" x-on:keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto" role="tablist" aria-label="tab options">
                    <flux:button
                        icon="square-3-stack-3d"
                        x-on:click="selectedTab = 'all'"
                        x-bind:aria-selected="selectedTab === 'all'"
                        x-bind:tabindex="selectedTab === 'all' ? '0' : '-1'"
                        x-bind:class="selectedTab === 'all' ? 'bg-[var(--color-accent)]! hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)]! text-[var(--color-accent-foreground)]! border! border-black/10! dark:border-0! shadow-[inset_0px_1px_--theme(--color-white/.2)]!' : ''"
                        class="rounded-full!"
                        role="tab"
                        aria-controls="tabpanelAll"
                    >
                        All Menu
                    </flux:button>
                    <flux:button
                        icon="square-3-stack-3d"
                        x-on:click="selectedTab = 'signature'"
                        x-bind:aria-selected="selectedTab === 'signature'"
                        x-bind:tabindex="selectedTab === 'signature' ? '0' : '-1'"
                        x-bind:class="selectedTab === 'signature' ? 'bg-[var(--color-accent)]! hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)]! text-[var(--color-accent-foreground)]! border! border-black/10! dark:border-0! shadow-[inset_0px_1px_--theme(--color-white/.2)]!' : ''"
                        class="rounded-full!"
                        role="tab"
                        aria-controls="tabpanelSignature"
                    >
                        Signature
                    </flux:button>
                    <flux:button
                        icon="square-3-stack-3d"
                        x-on:click="selectedTab = 'coffee'"
                        x-bind:aria-selected="selectedTab === 'coffee'"
                        x-bind:tabindex="selectedTab === 'coffee' ? '0' : '-1'"
                        x-bind:class="selectedTab === 'coffee' ? 'bg-[var(--color-accent)]! hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)]! text-[var(--color-accent-foreground)]! border! border-black/10! dark:border-0! shadow-[inset_0px_1px_--theme(--color-white/.2)]!' : ''"
                        class="rounded-full!"
                        role="tab"
                        aria-controls="tabpanelCoffee"
                    >
                        Coffee
                    </flux:button>
                    <flux:button
                        icon="square-3-stack-3d"
                        x-on:click="selectedTab = 'non-coffee'"
                        x-bind:aria-selected="selectedTab === 'non-coffee'"
                        x-bind:tabindex="selectedTab === 'non-coffee' ? '0' : '-1'"
                        x-bind:class="selectedTab === 'non-coffee' ? 'bg-[var(--color-accent)]! hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)]! text-[var(--color-accent-foreground)]! border! border-black/10! dark:border-0! shadow-[inset_0px_1px_--theme(--color-white/.2)]!' : ''"
                        class="rounded-full!"
                        role="tab"
                        aria-controls="tabpanelNon-Coffee"
                    >
                        Non-Coffee
                    </flux:button>
                    <flux:button
                        icon="square-3-stack-3d"
                        x-on:click="selectedTab = 'meals'"
                        x-bind:aria-selected="selectedTab === 'meals'"
                        x-bind:tabindex="selectedTab === 'meals' ? '0' : '-1'"
                        x-bind:class="selectedTab === 'meals' ? 'bg-[var(--color-accent)]! hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)]! text-[var(--color-accent-foreground)]! border! border-black/10! dark:border-0! shadow-[inset_0px_1px_--theme(--color-white/.2)]!' : ''"
                        class="rounded-full!"
                        role="tab"
                        aria-controls="tabpanelMeals"
                    >
                        Meals
                    </flux:button>
                    <flux:button
                        icon="square-3-stack-3d"
                        x-on:click="selectedTab = 'beverage'"
                        x-bind:aria-selected="selectedTab === 'beverage'"
                        x-bind:tabindex="selectedTab === 'beverage' ? '0' : '-1'"
                        x-bind:class="selectedTab === 'beverage' ? 'bg-[var(--color-accent)]! hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)]! text-[var(--color-accent-foreground)]! border! border-black/10! dark:border-0! shadow-[inset_0px_1px_--theme(--color-white/.2)]!' : ''"
                        class="rounded-full!"
                        role="tab"
                        aria-controls="tabpanelBeverage"
                    >
                        Beverage
                    </flux:button>
                    <flux:button
                        icon="square-3-stack-3d"
                        x-on:click="selectedTab = 'add'"
                        x-bind:aria-selected="selectedTab === 'add'"
                        x-bind:tabindex="selectedTab === 'add' ? '0' : '-1'"
                        x-bind:class="selectedTab === 'add' ? 'bg-[var(--color-accent)]! hover:bg-[color-mix(in_oklab,_var(--color-accent),_transparent_10%)]! text-[var(--color-accent-foreground)]! border! border-black/10! dark:border-0! shadow-[inset_0px_1px_--theme(--color-white/.2)]!' : ''"
                        class="rounded-full!"
                        role="tab"
                        aria-controls="tabpanelAdd"
                    >
                        Add Ons
                    </flux:button>
                </div>
                <div class="mt-6">
                    <div x-cloak x-show="selectedTab === 'all'" id="tabpanelAll" role="tabpanel" aria-label="all">
                        <div class="grid grid-cols-4 gap-6">
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="blue" variant="solid">Signature</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="blue" variant="solid">Signature</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <div class="mt-2 w-full h-8 px-3 border border-zinc-200 bg-white dark:border-zinc-600 dark:bg-zinc-700 rounded-full flex justify-around items-center">
                                    <flux:button icon="minus" size="xs" variant="primary" class="rounded-full!" />
                                    <flux:text>1</flux:text>
                                    <flux:button icon="plus" size="xs" variant="primary" class="rounded-full!" />
                                </div>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="red" variant="solid">Coffee</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="green" variant="solid">Non-Coffee</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <div class="mt-2 w-full h-8 px-3 border border-zinc-200 bg-white dark:border-zinc-600 dark:bg-zinc-700 rounded-full flex justify-around items-center">
                                    <flux:button icon="minus" size="xs" variant="primary" class="rounded-full!" />
                                    <flux:text>1</flux:text>
                                    <flux:button icon="plus" size="xs" variant="primary" class="rounded-full!" />
                                </div>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="purple" variant="solid">Meals</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="blue" variant="solid">Signature</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <div class="mt-2 w-full h-8 px-3 border border-zinc-200 bg-white dark:border-zinc-600 dark:bg-zinc-700 rounded-full flex justify-around items-center">
                                    <flux:button icon="minus" size="xs" variant="primary" class="rounded-full!" />
                                    <flux:text>2</flux:text>
                                    <flux:button icon="plus" size="xs" variant="primary" class="rounded-full!" />
                                </div>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="orange" variant="solid">Beverage</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="yellow" variant="solid">Add Ons</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                        </div>
                    </div>
                    <div x-cloak x-show="selectedTab === 'signature'" id="tabpanelSignature" role="tabpanel" aria-label="likes">
                        <div class="grid grid-cols-4 gap-6">
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="blue" variant="solid">Signature</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="blue" variant="solid">Signature</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <div class="mt-2 w-full h-8 px-3 border border-zinc-200 bg-white dark:border-zinc-600 dark:bg-zinc-700 rounded-full flex justify-around items-center">
                                    <flux:button icon="minus" size="xs" variant="primary" class="rounded-full!" />
                                    <flux:text>1</flux:text>
                                    <flux:button icon="plus" size="xs" variant="primary" class="rounded-full!" />
                                </div>
                            </div>
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="blue" variant="solid">Signature</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <div class="mt-2 w-full h-8 px-3 border border-zinc-200 bg-white dark:border-zinc-600 dark:bg-zinc-700 rounded-full flex justify-around items-center">
                                    <flux:button icon="minus" size="xs" variant="primary" class="rounded-full!" />
                                    <flux:text>2</flux:text>
                                    <flux:button icon="plus" size="xs" variant="primary" class="rounded-full!" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-cloak x-show="selectedTab === 'coffee'" id="tabpanelCoffe" role="tabpanel" aria-label="coffee">
                        <div class="grid grid-cols-4 gap-6">
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="red" variant="solid">Coffee</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                        </div>
                    </div>
                    <div x-cloak x-show="selectedTab === 'non-coffee'" id="tabpanelNon-coffee" role="tabpanel" aria-label="non-coffee">
                        <div class="grid grid-cols-4 gap-6">
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="green" variant="solid">Non-Coffee</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <div class="mt-2 w-full h-8 px-3 border border-zinc-200 bg-white dark:border-zinc-600 dark:bg-zinc-700 rounded-full flex justify-around items-center">
                                    <flux:button icon="minus" size="xs" variant="primary" class="rounded-full!" />
                                    <flux:text>1</flux:text>
                                    <flux:button icon="plus" size="xs" variant="primary" class="rounded-full!" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-cloak x-show="selectedTab === 'meals'" id="tabpanelMeals" role="tabpanel" aria-label="meals">
                        <div class="grid grid-cols-4 gap-6">
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="purple" variant="solid">Meals</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                        </div>
                    </div>
                    <div x-cloak x-show="selectedTab === 'beverage'" id="tabpanelBeverage" role="tabpanel" aria-label="beverage">
                        <div class="grid grid-cols-4 gap-6">
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="orange" variant="solid">Beverage</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                        </div>
                    </div>
                    <div x-cloak x-show="selectedTab === 'add'" id="tabpanelAdd" role="tabpanel" aria-label="add">
                        <div class="grid grid-cols-4 gap-6">
                            <div class="relative w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex flex-col items-center justify-center">
                                <img src="https://picsum.photos/200" alt="Product Image" class="h-36 w-full object-cover rounded-lg mb-2">
                                <flux:badge class="absolute top-4 right-4" color="yellow" variant="solid">Add Ons</flux:badge>
                                <div class="text-center">
                                    <flux:heading level="3" size="lg">Product Name</flux:heading>
                                    <flux:text>Rp 20.000</flux:text>
                                </div>
                                <flux:button icon="plus" variant="primary" size="sm" class="mt-2 w-full rounded-full!">
                                    Add Item
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-[550px] border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg space-y-6 p-6">
            <div class="flex items-center justify-between">
                <flux:heading level="4" size="lg">Order's Summary</flux:heading>
                <flux:subheading>#219021</flux:subheading>
            </div>

            <flux:separator />

            <div class="space-y-6">
                <flux:heading level="4" size="lg" class="flex items-center justify-start">
                    Total Items<flux:badge class="ms-2">4</flux:badge>
                </flux:heading>

                <div class="flex flex-col items-center justify-between gap-3">
                    <div class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/200" alt="Product Image" class="size-16 object-cover rounded-lg me-2">
                            <div class="text-start">
                                <flux:heading level="3" size="lg">Product Name</flux:heading>
                                <flux:text>Rp 40.000</flux:text>
                            </div>
                        </div>
                        <flux:badge>x2</flux:badge>
                        <flux:button icon="trash" size="sm" variant="danger" class="rounded-full!" />
                    </div>
                    <div class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/200" alt="Product Image" class="size-16 object-cover rounded-lg me-2">
                            <div class="text-start">
                                <flux:heading level="3" size="lg">Product Name</flux:heading>
                                <flux:text>Rp 20.000</flux:text>
                            </div>
                        </div>
                        <flux:badge>x1</flux:badge>
                        <flux:button icon="trash" size="sm" variant="danger" class="rounded-full!" />
                    </div>
                    <div class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/200" alt="Product Image" class="size-16 object-cover rounded-lg me-2">
                            <div class="text-start">
                                <flux:heading level="3" size="lg">Product Name</flux:heading>
                                <flux:text>Rp 20.000</flux:text>
                            </div>
                        </div>
                        <flux:badge>x1</flux:badge>
                        <flux:button icon="trash" size="sm" variant="danger" class="rounded-full!" />
                    </div>
                </div>

                <div class="w-full border border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 rounded-lg p-4 space-y-2">

                    <flux:heading level="4" size="lg">Payment Summary</flux:heading>

                    <flux:separator />

                    <div class="flex items-center justify-between">
                        <flux:text>Price</flux:text>
                        <flux:text>Rp 80.000</flux:text>
                    </div>

                    <div class="flex items-center justify-between">
                        <flux:text>Taxes (10%)</flux:text>
                        <flux:text>Rp 8.000</flux:text>
                    </div>

                    <div class="flex items-center justify-between">
                        <flux:text>Discount</flux:text>
                        <flux:text class="text-red-500">Rp 20.000</flux:text>
                    </div>

                    <flux:separator />

                    <div class="flex items-center justify-between">
                        <flux:heading level="5">Total</flux:heading>
                        <flux:text class="text-green-500">Rp 68.000</flux:text>
                    </div>
                </div>

                <flux:button variant="primary" class="w-full rounded-full!">
                    Place Order
                </flux:button>

            </div>
        </div>
    </div>
</x-layouts.app>
