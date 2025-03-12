export interface ListNavbarInterface {
    link: string,
    active?: boolean,
    text: string | null,
    icon?: string,
    childs?: ChildrenDropdownNavbarInterface[]
}

export interface ChildrenDropdownNavbarInterface{
    link: string,
    text: string,
    icon?:string,
}