print("Pizza Size: \n 1 - Large ($6.00) \n 2 - Extra Large ($10.00)")
print("Toppings: \n 1 - 1 Topping ($1.00) \n 2 - 2 Toppings ($1.75) \n 3 - 3 Toppings ($2.50) \n 4 - 4 Toppings ($3.35)")

size = input("Enter 1 for Large or 2 for Extra Large: ")
toppings = input("Enter number of toppings (1-4): ")

if size == "1":
    cost = 6.00
elif size == "2":
    cost = 10.00

if toppings == "1":
    cost += 1.00
elif toppings == "2":
    cost += 1.75
elif toppings == "3":
    cost += 2.50
elif toppings == "4":
    cost += 3.35

tax = cost * 0.13
total_cost = cost + tax

print("Pizza Cost: ${:.2f}".format(cost))
print("Tax: ${:.2f}".format(tax))
print("Total Cost: ${:.2f}".format(total_cost))