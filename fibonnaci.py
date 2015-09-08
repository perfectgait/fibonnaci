"""
Module that will calculate the fibonnaci sequence
"""

def fibonnaci(first, second, limit):
    if first == 0:
        print 0
        print 1
        new_first = 1
        new_second = 1
    else:
        new_second = first + second
        new_first = second

    if new_second < limit:
        print new_second
        fibonnaci(new_first, new_second, limit)

fibonnaci(0, 1, 35)