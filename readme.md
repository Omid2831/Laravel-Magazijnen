# Warehouse Management System – Jamin

This web application is designed for **warehouse employees** at the company Jamin to manage and track products stored in the warehouse efficiently. It provides detailed information about **product deliveries** and **allergen information** to ensure proper inventory oversight and customer safety.

---

## demo



https://github.com/user-attachments/assets/d3ee7f3e-3ca4-4cd0-8a5f-ee3cd2a857af



## Features

### 1. View Product Delivery Information

Warehouse employees can view detailed delivery data for each product, including:

* Dates when the product was delivered to the warehouse.
* Quantities delivered.
* Expected next delivery dates.
* Supplier information (Name, Contact Person, Supplier Number, Mobile).

**Behavior:**

* Products are sorted by **last delivery date** in ascending order.
* If the product is **not in stock**, a message will appear:
  `"This product is currently out of stock. The expected next delivery is: [date]"`
* Users are automatically redirected back to the warehouse overview page after 4 seconds if the product is out of stock.

**Example Scenario:**

* Click the **question mark icon** in the “Delivery Info” column for a product (e.g., *Mintnopjes*).
* See the full delivery history and upcoming expected delivery dates for that product.

---

### 2. View Product Allergen Information

Warehouse employees can access allergen information for each product to ensure safety for customers with allergies:

* Display all allergens associated with the selected product.
* Display allergen name and description.
* Products are sorted by allergen name in ascending order.

**Behavior:**

* If a product has **no allergens**, a message will appear:
  `"This product contains no substances that can cause an allergic reaction"`
* Users are automatically redirected back to the warehouse overview page after 4 seconds if there are no allergens.

**Example Scenario:**

* Click the **red cross icon** in the “Allergens Info” column for a product (e.g., *Zoute Ruitjes*).
* See the full allergen details for that product.

---

### Product List Overview

* All products in the warehouse are displayed in a table, **sorted by barcode in ascending order**.
* From the overview, employees can access **delivery info** and **allergen info** for each product.

---

This README gives clear insight into the **user roles, system features, and expected behavior** of the warehouse management system.




Perfect! Here’s an updated **GitHub-ready README** including your GitHub username and a way to show your GitHub profile image:

---

## Developer & Collaboration

![Profile Image](https://github.com/omid2831.png?size=100)

**Developer:** [Omid Mehrabi](https://github.com/omid2831)


**Location:** Netherlands

**Tech Stack:** PHP (Laravel), MySQL, Blade Templates, TailwindCSS

**Collaboration:** Open to collaboration for improvements, bug fixes, or additional features. Feel free to fork the repo or submit pull requests.



