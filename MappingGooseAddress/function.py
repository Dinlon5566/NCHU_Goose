import numpy as np


class Monitor():
    def __init__(self,codinate=[0,0],slope=0.9):
        ###
        # codinate : 監視器座標 1d array
        # slope : 監視器傾斜率 float (0.01~1)###

        self.codinate=np.array(codinate)
        self.slope=np.array(slope)


    def codinate_transfer(self,midpoint=[0,0]): ## 回傳轉換座標 消除拍攝角度導致的誤差
        return self.codinate+(self.slope*np.array(midpoint))

        

class Tracking(): ##整合各個監視器
    def __init__(self,monitor=[[0,0]],slope=[0.9]):
        ###
        # monitor: 所有監視器座標 2d array
        # slope : 所有監視器斜率 1d array ###
    
        self.device=[Monitor(codinate=monitor[i],slope=slope[i]) for i in range(len(monitor))]
    

    def get_location(self,device_id=0,midpoint=0,black_goose=False):
        ###
        # device_id : 攝影機id int
        # midpoint : 天鵝於圖片中的位置 1d array###
        if black_goose:
            return "black",self.device[device_id].codinate_transfer(midpoint=midpoint)
        return "white",self.device[device_id].codinate_transfer(midpoint=midpoint)
        
            
        