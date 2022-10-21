interface ListNode {
    val: number | null | undefined
    next: ListNode | null | undefined
}

const detectCycle = (head: ListNode | null): ListNode | null => {
    let slow: ListNode | null = head, fast: ListNode | null = head

    while (fast && fast.next) {
        slow = slow.next
        fast = fast.next.next

        if (slow == fast) {
            slow = head
            while (slow !== fast) {
                slow = slow.next
                fast = fast.next
            }
            return slow
        }
    }
    return null
}
