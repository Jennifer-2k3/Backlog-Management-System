import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_squared_error

# Sample data generation
np.random.seed(0)
X = np.random.randint(0, 300, size=(100, 1))  # Features (e.g., overs played)
y = np.random.randint(50, 400, size=(100, 1))  # Target (e.g., runs scored)

# Split data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Model training
model = LinearRegression()
model.fit(X_train, y_train)

# Model evaluation
train_predictions = model.predict(X_train)
test_predictions = model.predict(X_test)

train_mse = mean_squared_error(y_train, train_predictions)
test_mse = mean_squared_error(y_test, test_predictions)

print("Train MSE:", train_mse)
print("Test MSE:", test_mse)

# Prediction
overs_played = np.array([[20]])  # Number of overs played
predicted_runs = model.predict(overs_played)
print("Predicted runs after 20 overs:", predicted_runs[0][0])
