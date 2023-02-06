import time
import random

class node:
  def __init__(self,parentNode,childList):
    self.jug1=0
    self.jug2=0
    self.parentNode=parentNode
    self.childList=childList


def operation(i,inputNode):
  x=inputNode.jug1
  y=inputNode.jug2
  result=x+y

  if(i==1 and x<jug1):
    x=jug1

  elif(i==2 and y<jug2):
    y=jug2

  elif(i==3 and x>0):
    x=0

  elif(i==4 and y>0):
    y=0

  elif(i==5 and 0 < result >= jug1 and y>0):
    y=(y-(jug1-x))
    x=jug1

  elif(i==6 and 0 < result >= jug2 and x>0):
    x=(x-(jug2-y))
    y=jug2

  elif(i==7 and 0 < result <= jug1 and y >= 0):
    x=result
    y=0

  elif(i==8 and 0 < result <= jug2 and x >= 0):
    y=result
    x=0

  if(x==inputNode.jug1 and y==inputNode.jug2):
    return None

  newNode = node(inputNode,[])
  newNode.jug1=x
  newNode.jug2=y
  return newNode

def generateNode(nodeData, method):
  nodeList=[]
  rng = range(1,9)
  if(method == "DFS"):
    rng = random.sample(range(1,10), 9)
  for i in rng:
    genNode = operation(i,nodeData)
    if(genNode!=None):
      nodeList.append(genNode)
  nodeData.childList.extend(nodeList)
  return nodeList


class blindSearch:
  def __init__(self):
    self.nodeList=[]

  def find(self,initNode,destinationNode,method):
    self.nodeList.append(initNode)
    if(method=="DFS"):
      while len(self.nodeList)!=0:
        tempNode = self.nodeList.pop()
        if(tempNode.jug1 == destinationNode.jug1 and tempNode.jug2 == destinationNode.jug2):
          return tempNode
        else:
          self.nodeList.extend(generateNode(tempNode,"DFS"))
    else:
      while len(self.nodeList)!=0:
        tempNode = self.nodeList.pop(0)
        if(tempNode.jug1 == destinationNode.jug1 and tempNode.jug2 == destinationNode.jug2):
          return tempNode
        else:
          self.nodeList.extend(generateNode(tempNode,"BFS"))
    return None

def printPath(getNode):
  nodeList=[getNode]
  tempNode = getNode.parentNode
  while tempNode!=None:
    nodeList.append(tempNode)
    tempNode=tempNode.parentNode
  nodeList.reverse()
  return [nodeList,len(nodeList)-1]


jug1 = int(input("\n\nEnter MAX jug1 value: "))
jug2 = int(input("Enter MAX jug2 value: "))

initNode = node(None,[])

destinationNode = node(None,[])
destinationNode.jug1=int(input("Enter GOAL jug1 value: "))


print("\n\n====== BFS is Run ======\n")
initTime = time.time()
resultNode = blindSearch().find(initNode,destinationNode,"BFS")
finishTime = time.time()

if(resultNode!=None):
  print("Node is Found")
  pathList = printPath(resultNode)
  for i in pathList[0]:
    print(str.format("( {0} , {1} )",i.jug1,i.jug2))
  print(str.format("Path Cost: {0}",pathList[1]))
else:
  print("Not found!")

print(str.format("Time Require for BFS: {0} ms\n",(finishTime-initTime)*1000))


print("====== DFS is Run ======\n")
initTime = time.time()
resultNode = blindSearch().find(initNode,destinationNode,"DFS")
finishTime = time.time()

if(resultNode!=None):
  print("Node is Found")
  pathList = printPath(resultNode)
  print(str.format("Path Cost: {0}",pathList[1]))
else:
  print("Not found!")

print(str.format("Time Require for DFS: {0} ms\n\n",(finishTime-initTime)*1000))
