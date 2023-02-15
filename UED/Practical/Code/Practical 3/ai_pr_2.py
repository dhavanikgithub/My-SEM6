import time
print("Performed by DHYEY PATEL-20012011089")

class Node:
    def __init__(self, parent):
        self.Jug1 = 0
        self.Jug2 = 0
        self.parent = parent

# self.level = 0
# This function is creating child nodes, if it satisfies the rule.


def genrateAllSuccessors(nodeData):
    list = []
    for i in range(1, 9):
        childNodes = rules(i, nodeData)
        if childNodes != None:
            list.append(childNodes)
    return list


def rules(ruleNo, nodeData):
    Jug1 = nodeData.Jug1
    Jug2 = nodeData.Jug2
    if ruleNo == 1:
        if Jug1 < firstJugCap:
            Jug1 = firstJugCap

    if ruleNo == 2:
        if Jug2 < secondJugCap:
            Jug2 = secondJugCap

    if ruleNo == 3:
        if Jug1 > 0:
            Jug1 = 0

    if ruleNo == 4:
        if Jug2 > 0:
            Jug2 = 0

    if ruleNo == 5:
        if (0 < (Jug1 + Jug2) >= firstJugCap) and (Jug2 > 0):
            Jug2 -= (firstJugCap - Jug1)
            Jug1 = firstJugCap

    if ruleNo == 6:
        if (0 < Jug1 + Jug2 <= firstJugCap) and (Jug2 >= 0):
            Jug1 -= (secondJugCap - Jug2)
            Jug2 = secondJugCap

    if ruleNo == 7:
        if (0 < (Jug1 + Jug2) <= firstJugCap) and (Jug2 >= 0):
            Jug1 += Jug2
            Jug2 = 0

    if ruleNo == 8:
        if (0 < (Jug1 + Jug2) <= secondJugCap) and (Jug1 >= 0):
            Jug2 += Jug1
            Jug1 = 0

# If, no rule is applied
    if Jug1 == nodeData.Jug1 and Jug2 == nodeData.Jug2:
        return None


    newNode = Node(nodeData)
    newNode.Jug1 = Jug1
    newNode.Jug2 = Jug2

    return newNode


def bfs(initalNode, goalNode, goalNodeNo):
    pathList = []
    pathList.append(initalNode)
    while len(pathList) != 0:
        tempNode = pathList.pop(0)
        if goalNodeNo == 1:
            if tempNode.Jug1 == goalNode.Jug1:
                return tempNode
            else:
                pathList.extend(genrateAllSuccessors(tempNode))
        elif goalNodeNo == 2:
            if tempNode.Jug2 == goalNode.Jug2:
                return tempNode
            else:
                pathList.extend(genrateAllSuccessors(tempNode))
    return None


def printPath(nodeList):
    pathList = [nodeList]
    tempNode = nodeList.parent
    while tempNode != None:
        pathList.append(tempNode)
        tempNode = tempNode.parent
        return [reversed(pathList), len(pathList)-1]


firstJugCap = 4
secondJugCap = 3

# Starting node
initialNode = Node(None)

goalNode = Node(None)

goalNodeValue = 2
goalNodeNo = 1
if goalNodeNo == 1:
    goalNode.Jug1 = goalNodeValue
elif goalNodeNo == 2:
    goalNode.Jug2 = goalNodeValue

print("BFS is running...")
startingTime = time.time()
resultNode = bfs(initialNode, goalNode, goalNodeNo)
endingTime = time.time()

if resultNode != None:
    # print("Goal node found")
    pathList = printPath(resultNode)
    for i in pathList[0]:
        print("(", i.Jug1, ",", i.Jug2, ")")
    print("Cost = ", pathList[1])
else:
    print("Goal node not found")



print("Time taken for execution of bfs: ", (endingTime - startingTime))